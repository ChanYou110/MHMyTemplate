<template>
    <v-app>
        <v-app-bar dark app>
            <v-toolbar-title><router-link to="/">MonsterHunterMyTemplate</router-link></v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn>ログイン</v-btn>
            <template v-slot:extension>
                <v-tabs grow>
                    <v-tab to="/">タイムライン</v-tab>
                    <v-tab to="/lank">ランキング</v-tab>
                    <v-tab to="/serch">さがす</v-tab>
                    <v-tab to="/act">通知</v-tab>
                    <v-tab to="/mypage">マイページ</v-tab>
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
    <!--<div class="container">-->
    <!--    <nev class="navbar">-->
    <!--        <span class="navbar-title"><a href="/">MonsterHunterMyTemplate</a></span>-->
    <!--        <div>-->
    <!--            <button class="loginbtn">ログイン</button>-->
    <!--        </div>-->
    <!--    </nev>-->
    <!--    <div>-->
    <!--        <ul>-->
    <!--            <li><a href="/">タイムライン</a></li>-->
    <!--            <li><a href="/lank">ランキング</a></li>-->
    <!--            <li><a href="/serch">さがす</a></li>-->
    <!--            <li><a href="/act">通知</a></li>-->
    <!--            <li><a href="/mypage">マイページ</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->
    <!--</div>-->
</template>

<script>
    export default {}
</script>

<stile scoped>
    
</stile>