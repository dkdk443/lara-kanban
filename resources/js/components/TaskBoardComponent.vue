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
        {
          id:1,
          title: 'リストのタイトル'
        },
        {
          id:2,
          title: 'リストのタイトル2'
        },
        {
          id:3,
          title: 'リストのタイトル3'
        },
        {
          id:4,
          title: 'リストのタイトル4'
        },
        {
          id:5,
          title: 'リストのタイトル5'
        },
        {
          id:6,
          title: 'リストのタイトル6'
        },
         {
          id:7,
          title: 'リストのタイトル7'
        }
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
          id:8,
          title: this.title
        })
      this.title = '';

    }
  }
}
</script>

<style lang="scss" scoped>
.taskBoard {
  display: inline-flex;
  overflow-x: scroll;
  padding-top: 100px;
  background-image: url('https://cdn.pixabay.com/photo/2016/07/01/23/16/amusement-park-1492099_1280.jpg');
  background-size: cover;
  background-attachment: fixed;
  height: 100vh;
}

.placeholder {
  background-color: white;
  height: fit-content;
  width: 240px;
  margin: 0 20px;
  padding: 10px;
  background-color: rgb(238, 238, 238);
  border-radius: 4px;
}

</style>