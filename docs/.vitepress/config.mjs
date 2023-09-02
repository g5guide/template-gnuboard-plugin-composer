import { defineConfig } from 'vitepress'

const githubRepoName = 'template-plugin-composer';
const githubRepoUrl = `https://github.com/kg-framework/${githubRepoName}/`;
const githubPagesUrl = `https://kg-framework.github.io/${githubRepoName}/`;

// https://vitepress.dev/reference/site-config
export default defineConfig({
  title: "My Awesome Project",
  description: "A VitePress Site",
  base: `/${githubRepoName}/`,
  themeConfig: {
    // https://vitepress.dev/reference/default-theme-config
    search: {
      provider: 'local'
    },

    // UNB
    nav: [
      { text: 'Home', link: '/' },
      { text: 'Examples', link: '/markdown-examples' }
    ],

    // 사이드바
    sidebar: [
      {
        text: 'Examples',
        items: [
          { text: 'Markdown Examples', link: '/markdown-examples' },
          { text: 'Runtime API Examples', link: '/api-examples' }
        ]
      }
    ],

    socialLinks: [
      { icon: 'github', link: githubRepoUrl }
    ],
  },
  sitemap: {
    hostname: githubPagesUrl
  },
})
