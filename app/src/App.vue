<template>
  <div id="app">
    <PeopleList />
  </div>
</template>

<script>
import PeopleList from './components/PeopleList.vue';

export default {
  components: {
    PeopleList,
  },
};
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>