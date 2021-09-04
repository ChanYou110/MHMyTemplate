<template>
    <div>
        {{weapons}}
    </div>
</template>

<script>
    export default {
        data(){
            return {
                weapons:{}
            }
        },
        methods:{
            getWeapon(){
              axios.get('/weapons').then((response)=>{
                  this.weapons = response.data;
              })
            }  
        },
        mounted() {
            this.getWeapon();
        }
    }
</script>