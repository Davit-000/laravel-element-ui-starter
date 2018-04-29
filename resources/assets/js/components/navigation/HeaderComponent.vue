<style>
.el-header {
    background-color: #fff;
    color: #333;
    line-height: 60px;
}
</style>

<template>
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container-fluid">
        <!-- <el-menu class="el-menu-demo mr-auto" :collapse-transition="true" mode="horizontal"></el-menu>             -->
        <el-menu class="el-menu-demo ml-auto" :collapse-transition="true" mode="horizontal">
            <el-submenu index="1">
                <template slot="title">Workspace</template>
                <el-menu-item index="1-1">item one</el-menu-item>
                <el-menu-item index="1-2">item two</el-menu-item>
                <el-menu-item index="1-3">item three</el-menu-item>            
            </el-submenu>        
        </el-menu>
    </div>
</nav>
</template>
