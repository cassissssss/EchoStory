<script setup>
import { ref } from 'vue';
import { useFetchJson } from '@/composables/useFetchJson';

const { data: stories, error, loading } = useFetchJson('api/v1/stories');
</script>

<template>
    <div class="p-4">
        <h1 class="text-2xl font-bold mb-4">Liste des histoires</h1>

        <div v-if="loading">Chargement...</div>
        <div v-if="error">Erreur: {{ error.statusText }}</div>

        <div v-else-if="stories">
            <div v-for="story in stories" :key="story.id" class="border rounded p-4 mb-4 shadow bg-white">
                <h2 class="text-xl font-semibold">{{ story.title }}</h2>
                <p class="text-gray-700">{{ story.summary }}</p>
                <p class="text-sm text-gray-500 mt-2">Auteur : {{ story.author ?? 'Anonyme' }}</p>
            </div>
        </div>
    </div>
</template>
