<template>
  <div class="taskBoard">
    <tasklist-component
        v-for="item in list"
        :key="item.id"
        :list="item"
      ></tasklist-component>
    <span class="placeholder">
    <template>    
      <div v-if="creatingTitle">
      <b-form-input
        placeholder="リストのタイトルを入力"
        v-model="title"
        v-if="creatingTitle"
      ></b-form-input>
     <b-button variant="success"
      @click="addList()"
     >Button</b-button>
      </div>
    </template>

  </span>
    </div>
</template>

<script>
import TaskListComponent from './TasklistComponent'
export default {
  components: {

  },
  data(){
    return {
      title:'',
      creatingTitle: true,
      list:[
        // {
        //   id:1,
        //   title: ''
        // },
        // {
        //   id:2,
        //   title: 'リストのタイトル2'
        // },
        // {
        //   id:3,
        //   title: 'リストのタイトル3'
        // },
        // {
        //   id:4,
        //   title: 'リストのタイトル4'
        // },
        // {
        //   id:5,
        //   title: 'リストのタイトル5'
        // },
        // {
        //   id:6,
        //   title: 'リストのタイトル6'
        // },
        //  {
        //   id:7,
        //   title: 'リストのタイトル7'
        // }
      ]
    }
  },
  methods: {
    creatingList() {
      this.list.push(
        {
          id:8,
          title: ''
        })
    },
    addList() {

      this.list.push(
        {
          id: this.getLastId + 1,
          title: this.title
        })
      this.title = '';

    }
  },
  computed: {
    getLastId(){
      if (this.list.length === 0) {
        return 0
      } else {
         return this.list.slice(-1)[0].id;
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.taskBoard {
  position: relative;
  display: inline-flex;
  overflow-x: scroll;
  padding-top: 100px;
  height: calc(100vh - 80px);
  width: 100vw;
}

.placeholder {
  background-color: white;
  height: fit-content;
  max-width: 240px;
  min-width: 240px;
  margin: 0 20px;
  padding: 10px;
  background-color: rgb(238, 238, 238);
  border-radius: 4px;
}

</style>