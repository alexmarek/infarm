<template>
<nav class="navbar">
    <div class="" id="appnav">
      <div class="nav navbar-nav">
        <router-link
          to="/"
          class="nav-item nav-link"
          active-class="active"
        >Home</router-link>
        <router-link
          to="/portfolio"
          class="nav-item nav-link"
          active-class="active"
        >Portfolio</router-link>
        <router-link
          to="/about"
          class="nav-item nav-link"
          active-class="active"
        >About</router-link>
        <router-link
          to="/contact"
          class="nav-item nav-link"
          active-class="active"
        >Contact</router-link>
      </div>
    </div>
  </nav>
</template>

<script>
export default {}
</script>
