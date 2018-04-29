<template>
    <el-container>
        <el-header>
            <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal">
                <el-menu-item index="1"><a href="/">Tracker</a></el-menu-item>            
                <el-menu-item index="2" v-if="auth"><a href="/home">Dashboard</a></el-menu-item>
                <template v-else>                   
                    <el-menu-item index="2" class="pull-right"><a href="/register">Register</a></el-menu-item>                                         
                    <el-menu-item index="3" class="pull-right"><a href="/login">Login</a></el-menu-item>
                </template>                    
            </el-menu>        
        </el-header>
        <el-main>
            <h1 class="text-center">Wlecome to OwnManager!!!</h1>
        </el-main>
        <el-footer>

        </el-footer>
    </el-container>
</template>

<script>
    export default {
        props: {
            auth: {
                required: true,
                type: Number
            }
        },
        data() {
            return {
                activeIndex: '1',            
            };
        }    
    }
</script>
