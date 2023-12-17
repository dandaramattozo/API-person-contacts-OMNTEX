<template>
  <div>
    <h2>People</h2>
    <ul>
      <li v-for="person in people" :key="person.id">
        {{ person.name }} 
        <button @click="deletePerson(person.id)">Delete</button>
        <ContactsList :personId="person.id" />
      </li>
    </ul>
    <input v-model="newPersonName" placeholder="New Person Name" />
    <button @click="addPerson">Add Person</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      people: [],
      newPersonName: "",
    };
  },
  mounted() {
    this.fetchPeople();
  },
  methods: {
    fetchPeople() {
  
    },
    addPerson() {

      this.newPersonName = "";
      this.fetchPeople();
    },
    deletePerson(personId) {

      this.fetchPeople();
    },
  },
};
</script>