<template>
    <div class="taskBoard">
      <tasklist-component 
        v-for="item in list" 
        :key="item.id" 
        :list="item"
      ></tasklist-component>
    </div>
</template>

<script>
import TaskListComponent from './TasklistComponent'
export default {
  components: {

  },
  data(){
    return {
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
  }
}
</script>

<style lang="scss" scoped>
.taskBoard {
  display: inline-flex;
  overflow-x: scroll;
  margin-top: 100px;
  



}
</style>