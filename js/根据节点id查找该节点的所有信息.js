function findNodeById(tree, id) {
  for (let i = 0; i < tree.length; i++) {
    if (tree[i].id === id) {
      return tree[i];
    }
    if (tree[i].children) {
      const found = findNodeById(tree[i].children, id);
      if (found) {
        return found;
      }
    }
  }
  return null;
}

// 输入数组
const data = [
  {
    id: "1726730967217512",
    pid: "0",
    hasChild: true,
    children: [
      {
        id: "1726730991246695",
        pid: "1726730967217512",
        hasChild: true,
        children: [
          {
            id: "1726731006242826",
            pid: "1726730991246695",
            hasChild: true,
            children: [
              {
                id: "1726731038844940",
                pid: "1726731006242826",
                hasChild: false,
                children: null,
                level: 3,
                name: "子规则3",
                type: "main-branch",
                width: 100,
                height: 32,
                sort: 4,
              },
            ],
            level: 2,
            name: "子规则2",
            type: "main-branch",
            width: 100,
            height: 32,
            sort: 3,
          },
          {
            id: "1726733024968914",
            pid: "1726730991246695",
            hasChild: false,
            children: null,
            level: 2,
            name: "子规则test",
            type: "main-branch",
            width: 100,
            height: 32,
            sort: 5,
          },
        ],
        level: 1,
        name: "子规则1",
        type: "main-branch",
        width: 100,
        height: 32,
        sort: 2,
      },
    ],
    level: 0,
    name: "主规则test-scf",
    type: "main",
    width: 100,
    height: 32,
    sort: 0,
  },
];

const t = findNodeById(data, "1726730967217512");
console.log(t);
