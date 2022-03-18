<template>
  <div id="app">
    <router-link to="/Login">login</router-link>
  </div>
</template>

<script>
export default {
    name:"Home",
  props: {
    msg: String,
  },
  components: {},
  setup(props) {},
  data() {
    return {
      count: 0,
    };
  },
  methods: {},
};
</script>

<style>
</style>
