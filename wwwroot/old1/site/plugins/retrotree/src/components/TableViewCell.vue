<template>
<k-list>
  <template v-if="title">
    <k-list-item image="true" :class="depth" :data="data" :text="title" :info="info" :showSlug="showSlug" :showStatus="showStatus" :treeMaxDepth="treeMaxDepth" :treeDefaultIcon="treeDefaultIcon" @click="goToPanelLocation(panel_url)"
    :icon="createIconSet(showPageIcon,iconEmoji,iconType,iconBack)"
     />
  </template>

  <table-view-cell v-for="(item, index) in data"
    :key="index"
    :data="item.child"
    :title="transTitle(item)"
    :language="language"
    :showSlug="showSlug"
    :showStatus="showStatus"
    :showPageIcon="showPageIcon"
    :treeMaxDepth="treeMaxDepth"
    :treeDefaultIcon="treeDefaultIcon"
    :info="showPageSlug(item) + ' ' + showPageStatus(item.status)"
    :panel_url="item.panel"
    :iconType="item.icon.type"
    :iconBack="item.icon.back"
    :iconEmoji="item.icon.emoji"
    @click="goToPanelLocation(item.panel)"
    :class="getMaxLevelDepth(item.depth-1) + ' ' + lastItem(index,data)"
    >
  </table-view-cell>

</k-list>
</template>

<script>
/*

  recusive vue template:
  - TableViewCell is recusive as long as item available in item.child

 */
export default {
  props: ['language', 'data', 'title', 'iconType', 'iconBack', 'iconEmoji', 'depth', 'panel_url', 'info', 'showSlug', 'showStatus', 'showPageIcon' ,'treeMaxDepth', 'treeDefaultIcon'],
  name: 'table-view-cell',
  methods: {
    lastItem: function(index,data) {
      return index==data.length-1 ? "last-item" : "item"
    },
    createIconSet: function(showPageIcon, iconEmoji, iconType, iconBack) {
      return this.showPageIcon == true ? { emoji: iconEmoji, type: iconType, back: iconBack} : { emoji: false, type: this.treeDefaultIcon, back: iconBack};
    },
    showPageStatus: function(status) {
      return this.showStatus == true ? '<span class=' + status + '></span>' : '';
    },
    showPageSlug: function(item) {
      return this.showSlug == true ? this.slugLang(item) : '';
    },
    goToPanelLocation: function(panelLink) {
      window.location.href = panelLink;
    },
    getMaxLevelDepth: function(currentDepth) {
      return currentDepth >= this.treeMaxDepth ? `level_hidden` : `level_${currentDepth}`;
    },
    transTitle(item) {
       if(item.translations[this.language]){
         if(item.translations[this.language].exists){
          return item.translations[this.language].content.title;
         }
       }
      return item.title
    },
    slugLang(item) {
      if(!this.$store.state.languages.current){
        return item.slug;
      }
      if(this.language != this.$store.state.languages.default.code){
        if(item.translations[this.language]){
          if(item.translations[this.language].slug){
            return `/${this.language}/${item.translations[this.language].slug}`;
          }
       }
        return `/${this.language}/${item.slug}`;
      }
      else{
        return item.slug;
      }
    }
  },
}
</script>
<style lang="scss">
@import './src/scss/index.scss'
</style>