<template>
    <v-btn 
        @click='openForm'
        class="mx-2"
        fab
        dark
        color="indigo"
    >
        <v-icon dark>
            mdi-plus
        </v-icon>
    </v-btn>
</template>

<script>
    export default {
        methods:{
            openForm(){
                this.$router.push({path:'/create'})
            }
        }
    }
</script>

<stile scoped>
    
</stile>