import Vapi from 'vuex-rest-api'

const portfolio = new Vapi({
  baseURL: 'https://data.infinityseeker.com/wp-json/wp/v2/',
  state: {
    portfolio: []
  }
})
  .get({
    action: 'getPortfolio',
    property: 'portfolio',
    path: '/portfolio'
  })
  .getStore()

export default portfolio
