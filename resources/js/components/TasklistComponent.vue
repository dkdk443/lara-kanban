<template>
  <b-card img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-bottom  header="リストの名前"
      header-tag="header">
      <div class="task-card"
        v-for="(task, index) in tasks"
        :key="task.id"
        @mouseover="showEditTaskButton(index)"
        @mouseleave="hideEditTaskButton(index)"
        @click="editTaskCard(task.id)"
      >
      <div 
        class="icon"
        v-if="isHovering && index === hoverIndex"
      >edit</div>
        <div class="task-card__body">
          <p>{{task.content}}</p>
        </div>
      </div>
  </b-card>
</template>

<script>
export default {
  data() {
    return{
      isHovering: false,
      hoverIndex: null,
      tasks: [
        {
          id:1,
          content:'概算見積もりを出す'
        },
        {
          id:2,
          content:'概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す'
        },
        {
          id:3,
          content:'概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す'
        }
      ]
    }
  },
  methods: {
    showEditTaskButton(index) {
      this.hoverIndex = index;
      this.isHovering = true;
    },
    hideEditTaskButton(index) {
      this.hoverIndex = index;
      this.isHovering = false;
    },
    editTaskCard(task_id){
      alert(`card_id:${task_id}のカードを編集`);
    }
  }
}
</script>
<style lang="scss" scoped>
.task-card {
  position: relative;
  font-size: 14px;
  box-shadow: 0px 8px 16px -2px rgba(10,10,10,0.1), 0px 0px 0px 1px rgba(10,10,10,0.02);
  padding: 10px;
  border-radius: 3px;
  margin-bottom: 12px;
  cursor: pointer;
  &:hover {
    background-color: rgb(230, 230, 230);
  }
  .icon {
    position: absolute;
    top: 0;
    right: 0;
  }
}
</style>