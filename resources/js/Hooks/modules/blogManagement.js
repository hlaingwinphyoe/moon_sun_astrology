export const blogManagement = [
    {
        id: "7",
        name: "Blog",
        icon: `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256"><path fill="currentColor" d="m210.78 39.25l-130.25-23A16 16 0 0 0 62 29.23l-29.75 169a16 16 0 0 0 13 18.53l130.25 23a16 16 0 0 0 18.54-13l29.75-169a16 16 0 0 0-13.01-18.51m-75.28 92.31a8 8 0 0 1-7.87 6.61a8.27 8.27 0 0 1-1.4-.12l-41.5-7.33A8 8 0 0 1 87.52 115l41.48 7.29a8 8 0 0 1 6.5 9.27m47-24.18a8 8 0 0 1-7.86 6.61a7.55 7.55 0 0 1-1.41-.13l-83-14.65a8 8 0 0 1 2.79-15.76l83 14.66a8 8 0 0 1 6.51 9.27Zm5.55-31.52a8 8 0 0 1-7.87 6.61a8.36 8.36 0 0 1-1.4-.12l-83-14.66a8 8 0 1 1 2.78-15.75l83 14.65a8 8 0 0 1 6.52 9.27Z"/></svg>`,
        url: "/admin",
        type: "group",
        permission: true,
        children: [
            {
                id: "7-1",
                name: "Post",
                type: "page",
                permission: true,
                url: "/admin/posts",
            },
            {
                id: "7-2",
                name: "Category",
                type: "page",
                permission: true,
                url: "/admin/categories",
            },
        ],
    },
];
