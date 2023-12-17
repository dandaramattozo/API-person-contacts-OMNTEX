<template>
  <div>
    <h3>Contacts</h3>
    <ul>
      <li v-for="contact in contacts" :key="contact.id">
        {{ contact.type }}: {{ contact.value }} 
        <button @click="deleteContact(contact.id)">Delete</button>
      </li>
    </ul>
    <input v-model="newContactType" placeholder="Contact Type" />
    <input v-model="newContactValue" placeholder="Contact Value" />
    <button @click="addContact">Add Contact</button>
  </div>
</template>

<script>
export default {
  props: ['personId'],
  data() {
    return {
      contacts: [],
      newContactType: "",
      newContactValue: "",
    };
  },
  mounted() {
    this.fetchContacts();
  },
  watch: {
    personId: function () {
      this.fetchContacts();
    },
  },
  methods: {
    fetchContacts() {
      // Make API request to get contacts for a person
    },
    addContact() {
      // Make API request to add contact
      this.newContactType = "";
      this.newContactValue = "";
      this.fetchContacts();
    },
    deleteContact(contactId) {
      // Make API request to delete contact
      this.fetchContacts();
    },
  },
};
</script>