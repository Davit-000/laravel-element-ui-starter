<style>
.el-menu-vertical-demo:not(.el-menu--collapse) {
    width: 200px;
    min-height: 400px;
}
</style>

<template>
    <!-- Vertical menu -->
    <el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose" :collapse="isCollapse">
        <el-menu-item index="0" @click="isCollapse = !isCollapse">
            <i class="el-icon-menu"></i>
            <span slot="title">Main</span>
        </el-menu-item>
        <el-submenu index="1">
            <template slot="title">
                <i class="el-icon-location"></i>
                <span slot="title">Navigator One</span>
            </template>
            <el-menu-item-group>
                <span slot="title">Group One</span>
                <el-menu-item index="1-1">item one</el-menu-item>
                <el-menu-item index="1-2">item two</el-menu-item>
            </el-menu-item-group>
            <el-menu-item-group title="Group Two">
                <el-menu-item index="1-3">item three</el-menu-item>
            </el-menu-item-group>
            <el-submenu index="1-4">
                <span slot="title">item four</span>
                <el-menu-item index="1-4-1">item one</el-menu-item>
            </el-submenu>
        </el-submenu>        
        <el-menu-item index="3" disabled>
            <i class="el-icon-document"></i>
            <span slot="title">Navigator Three</span>
        </el-menu-item>
        <el-menu-item index="4">
            <i class="el-icon-setting"></i>
            <span slot="title">Navigator Four</span>
        </el-menu-item>
    </el-menu>
</template>

<script>
    export default {
        data() {
            return {
                isCollapse: true,
                activeIndex: '1',
            };
        },
        methods: {
            handleOpen(key, keyPath) {
                console.log(key, keyPath);
            },
            handleClose(key, keyPath) {
                console.log(key, keyPath);
            },
            handleSelect(key, keyPath) {
                console.log(key, keyPath);
            }
        }
    }
</script>