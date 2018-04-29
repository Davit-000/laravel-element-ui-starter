<style>
.el-header {
    background-color: #fff;
    color: #333;
    line-height: 60px;
}
.navbar-laravel {
    padding: 0 !important;
}
</style>

<template>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container-fluid">        
        <el-menu class="el-menu-demo ml-auto" :collapse-transition="true" mode="horizontal">
            <template v-if="!auth">
                <el-menu-item index="1"><a href="/login">Login</a></el-menu-item>
                <el-menu-item index="2"><a href="/register">Register</a></el-menu-item>
            </template>
            <el-submenu index="1" v-else>
                <template slot="title">{{ auth.name }}</template>
                <el-menu-item index="1-1">
                    <a href="/logout" @click="logout($event)">Logout</a>

                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        <input type="hidden" id="token" name="_token" :value="token">
                    </form>    
                </el-menu-item>                      
            </el-submenu>        
        </el-menu>
    </div>
</nav>
</template>

<script>
export default {
    props: {
        auth: {
            requred: true,        
        },
        token: {
            requred: true,
            type: String
        }
    },
    data() {
        return {}
    },
    methods: {
        logout(event) {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    },
}
</script>