<template>
    <a href="" class="troisPoints" v-on:click="affiche = !affiche">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
        </svg>
    </a>    
</template>

<script>
    export default {
        el: '.troisPoints',
        data(){
            return {
                affiche: false
            }   
        },
        methods: {
            afficheCategorie() {
                if (screen.width > 577){
                    el.style.background = 'yellow';//display = 'none';
                }else{
                    el.style.background = 'red';
                    //el.style.display = 'unset';
                }
            }  
        },
        mounted() {
            console.log(screen.width) ; 
        }
    }
</script>

<style scoped>
    .troisPoints {
        background-color: chartreuse;
        margin-top: -3%;
        margin-right: -3%;
    }
</style>>

</style>