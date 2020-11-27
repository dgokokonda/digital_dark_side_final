module.exports = {
  root: true,
  env: {
    node: true,
    jquery: true
  },
  extends: ['plugin:vue/essential', '@vue/prettier'],
  rules: {
    // "no-console": process.env.NODE_ENV === "production" ? "error" : "off",
    'no-console': 'off',
    'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',
    'vue/max-attributes-per-line': 'off'
  },
  parserOptions: {
    parser: 'babel-eslint'
  }
};