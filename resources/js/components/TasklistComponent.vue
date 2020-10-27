<template>
  <b-card>
    <div class="task-header">
      <h4 class="task-name">taskkkkkkkkkxxxxxxxxxxxxxxxk</h4>
      <b-icon 
        icon="three-dots" 
        class="header-icon"
        @click="showListOption()"
        >
        </b-icon>
      <div class="task-option"
        v-if="isShowingTaskOption"
      >
        <div class="task-option__header">
          <h5>リスト操作</h5>
        </div>
        <div class="task-option__content">
          <div class="task-option__section">
            <ul>
              <li>aaaa</li>
              <li>iiii</li>
              <li>uuuu</li>
              <li>eeee</li>
              <li>oooo</li>
            </ul>
          </div>
          <div class="task-option__section">
            
          </div>
          <div class="task-option__section">
            
          </div>
          
        </div>
    </div>
    </div>

    <div class="task-card task-card-hover"
      v-for="(task, index) in tasks"
      :key="task.id"
      @mouseover="showEditTaskButton(index)"
      @mouseleave="hideEditTaskButton(index)"
      @click.stop="showTaskDetail(task.id)"
      >
      <div 
        class="icon"
        v-if="isHovering && index === hoverIndex"
        @click.stop="editTaskCard(task.id)"
      >edit</div>
        <div class="task-card__body">
          <p>{{task.content}}</p>
        </div>
      </div>
    <div class="task-card" v-if="isCreatingTask">
      <b-form-textarea
        class="task-form"
        id="textarea"
        v-model="content"
        placeholder="ここにカードのタイトルを入力"
        rows="3"
        max-rows="6"
      ></b-form-textarea>
    </div>
      <div class="task-footer">
        <div class="task-footer__button"
          @click="addTask()"
          v-if="!isCreatingTask"
        >
          <b-icon icon="plus" scale="2" class="plus-icon"></b-icon>
          さらにカードを追加
        </div>
         <b-button variant="success"
          size="sm"
          v-if="isCreatingTask"
          @click="saveTask()"
         >カードを追加</b-button>
      </div>
  </b-card>
</template>

<script>
export default {
  data() {
    return{
      isHovering: false,
      hoverIndex: null,
      isCreatingTask: false,
      isShowingTaskOption: false,
      content: '',
      tasks: [
        {
          id: 1,
          content:'概算見積もりを出す',
          list_id: 1
        },
        {
          id:2,
          content:'概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す',
          list_id: 1
        },
        {
          id:3,
          content:'概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す概算見積もりを出す',
          list_id: 2
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
    showTaskDetail(task_id) {
      alert(`card_id:${task_id}のカードの詳細`)
    },
    showListOption() {
      this.isShowingTaskOption = !this.isShowingTaskOption;
    },
    addTask() {
      this.isCreatingTask = true;
    },
    saveTask() {
      this.tasks.push(
         {
          id:4,
          content:'タスクを追加だよ！タスク',
          list_id: 2
        }
      );
      this.content = "";
      this.isCreatingTask = false;
    },
    editTaskCard(task_id){
      alert(`card_id:${task_id}のカードを編集`);
    }
  }
}
</script>
<style lang="scss" scoped>

.task-header {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  position: relative;
  .task-name {
  font-size: 22px;
  margin-bottom: 8px;
  flex: 1;
  max-width: 80%;
  }
  .header-icon {
    width: 24px;
    cursor: pointer;
  }
  .task-option {
    width: 200px;
    position: absolute;
    padding: 20px;
    background-color: white;
    top: 20px;
    right: -180px;
    z-index: 10;
    box-shadow: 0px 8px 16px -2px rgba(10,10,10,0.1), 0px 0px 0px 1px rgba(10,10,10,0.02);
    h5 {
      font-size: 16px;
      text-align: center;
    }
  }
}

.task-form {
  font-size: 14px;
  border-style: none;
  padding: 0;
}
.task-card {
  position: relative;
  font-size: 14px;
  box-shadow: 0px 8px 16px -2px rgba(10,10,10,0.1), 0px 0px 0px 1px rgba(10,10,10,0.02);
  padding: 10px;
  border-radius: 3px;
  margin-bottom: 12px;
  cursor: pointer;
  &-hover {
    &:hover {
    background-color: rgb(240, 240, 240);
  }
  }
  .icon {
    position: absolute;
    top: 0;
    right: 0;
  }
}
.task-footer {
  cursor: pointer;
  border-radius: 3px;
  padding: 6px 12px;
  &__button {
    &:hover {
    background-color: rgb(228, 228, 228);
  }
  }
  .plus-icon {
    margin-right: 4px;
  }
  font-size: 14px;
}
</style>