<template>
  <div class="">

    <div v-for="(item, index) in portfolio.portfolio" :key="index">

     <div v-if="portfolioId == item.slug">
       <a class="go-back" href="/portfolio">Go back</a>
      <h1>{{ item.title.rendered }}</h1>
      <img :src="item.acf.portfolio_image">
      <h2>Details</h2>
      <span v-html="item.content.rendered"></span>
      <h2>Highlights</h2>
      <ul>
        <li v-for="(highlight, index) in  item.acf.project_highlights" :key="index">{{highlight.highlight}}</li>
      </ul>
      <h3>Visit website</h3>
      <a class="site-url" :href="'https://' + item.acf.site_url" target="_blank" rel="noreferrer noopener">{{ item.acf.site_url }}</a>
      <a class="go-back" href="/portfolio">Go back</a>
     </div>
    </div>

  </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
export default {
  name: "Portfolio",
  data() {
    return {
      portfolioId: this.$route.params.id,
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
<style scoped lang="scss">
img {
  max-width: 700px;
}
@media screen and (max-width: 800px){
  img {
    max-width: 95%;
  }
}

.site-url{
  display: block;
}

.go-back {
  display: inline-block;
  padding: 0.5rem 1rem;
  background: yellow;
  color: black;
  margin: 2rem auto;
  text-decoration: none;
  transition: transform 0.15s ease-in-out;
  &:hover {
    transform: translateY(-2px);
  }
}

</style>
