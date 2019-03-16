<template>
  <div class="contact">
    <h1>{{ msg }}</h1>
     <p>alex at infinityseeker.com</p>
  </div>
</template>

<script>
import { mapState, mapActions } from "vuex";
export default {
  name: 'Contact',
  data () {
    return {
      msg: 'Contact me'
    }
  },
  created() {
    this.getPosts();
  },
  computed: mapState({
    pages: state => state.pages
  }),
  methods: {
    ...mapActions(["getPosts"])
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
