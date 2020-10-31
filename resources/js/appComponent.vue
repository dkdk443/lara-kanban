<template>
  <div>
     <header-component></header-component>
        <main>
          <taskboard-component></taskboard-component>
        </main>
    <task-detail-component
      v-if="isDisplayedModal">
    </task-detail-component>
  </div>
</template>

<script>
export default {
  data() {
    return {
    
    }
  },
  methods: {
    displayModal() {
      this.$store.state.isDisplayedModal = true;
    },
    hideModal() {
      this.$store.state.isDisplayedModal = false;
    }
  },
  computed: {
    isDisplayedModal(){
      return this.$store.state.isDisplayedModal;
    }
   
  }
}
</script>