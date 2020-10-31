<template>
  <div id="overlay">
    <div class="task-mordal"
    >
    <span
      @click="hideModal()"
      class="close"
    >閉じる</span>
      <div class="task-mordal__section">
         <h3></h3>
      </div>
      <div class="task-mordal__section">
        <h3>説明</h3>
        <span class="task-detail-placeholser">詳しい説明を追加してください</span>
      </div>
      <div class="task-mordal__section">
        <h3>アクティビティログ</h3>
      </div>


    </div>
  </div>

</template>

<script>
export default {
  props: {
    'task': {
      type: Object
    }
  },
  data(){
    return{
      
    }
  },
  methods: {
    hideModal() {
      this.$store.state.isDisplayedModal = false;
    }
  }
}
</script>

<style lang="scss">
#overlay {
  position: absolute;
  background:rgba(0, 0, 0, 0.5);
  width: 100vw;
  height: 100vh;
  z-index: 100;
  top: 0;
  display: flex;
  align-items: center;
  justify-content: center;
}
.task-mordal {
  width: 600px;
  height: 420px;
  background-color: white;
  z-index: 100;
  padding: 20px;
  position: relative;
  .close {
    position: absolute;
    right: 0;
  }

}
h3 {
  font-size: 18px;
  font-weight: bold;
}
.task-detail-placeholser {
  font-size:  14px;
  background-color: rgb(223, 223, 223);
}
</style>