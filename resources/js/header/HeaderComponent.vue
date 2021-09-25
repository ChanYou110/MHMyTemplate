<template>
    <v-app>
        <v-app-bar dark app clipped-left>
            <v-toolbar-title>MonsterHunterMyTemplate</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn>ログイン</v-btn>
            <template v-slot:extension>
                <v-tabs grow>
                    <v-tab to="/">タイムライン</v-tab>
                    <v-tab to="/lank">ランキング</v-tab>
                    <v-tab to="/search">さがす</v-tab>
                    <v-tab to="/act">通知</v-tab>
                    <v-tab :to="{ name: 'myPage', params: { id: user.id }}">マイページ</v-tab>
                </v-tabs>
            </template>
        </v-app-bar>
        <v-main>
            <v-container fluid>
                <create-post-component></create-post-component>
                <router-view></router-view>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
    export default {
        data(){
            return {
                user:{}
            }
        },
        methods:{
            getLoginUser(){
                axios.get('/user').then((response)=>{
                    this.user = response.data;
                })
            }
        },
        mounted() {
            this.getLoginUser();
        }
    }
</script>

<stile scoped>
    
</stile>