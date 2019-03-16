<template>
  <div class="">
    <h1>{{ msg }}</h1>
    <ul class="portfolio" v-masonry transition-duration="0.3s" item-selector=".portfolio__item">
      <li v-masonry-tile class="portfolio__item"  v-for="(item, index) in portfolio.portfolio" :key="index">
        <router-link :to="'portfolio/' + item.slug">
          <div class="portfolio__item__bg" :style="{'background-color': item.acf.hover_background}"></div>
          <img :src="item.acf.portfolio_image" :alt="item.title.rendered" :title="item.title.rendered" />
          <h2>{{ item.title.rendered }}</h2>
        </router-link>
      </li>
    </ul>

  </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
export default {
  name: "Portfolio",
  data() {
    return {
      msg: "My projects"
    };
  },
  beforeMount() {
    this.getPortfolio();
  },
  computed: mapState({
    portfolio: state => state.portfolio
  }),
  methods: {
    ...mapActions(["getPortfolio"])
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .portfolio {
    width: 100%;
    max-width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    list-style-type: none;
  }
  .portfolio__item {
    max-width: 23%;
    margin: 0.5%;
    cursor: pointer;
    overflow: hidden;
  }

  .portfolio__item__bg {
    width: 100%;
    height: 100%;
    position:absolute;
     transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  }
  .portfolio__item img {
    max-width: 100%;
  }
  .portfolio__item h2 {
    position: absolute;
    text-align: center;
    top: calc(50% - 50px);
    color: black;
    padding: 10px;
    z-index: 1;
    border-left: none;
    margin-left: -1px;
    background-color: white;
  }
  .portfolio__item:hover h2 {
    color: black;
  }
  .portfolio__item:hover  .portfolio__item__bg {
    background: transparent !important;
  }
  @media (max-width: 1000px){
    .portfolio__item {
      max-width: 100%;
    }
  }
</style>
