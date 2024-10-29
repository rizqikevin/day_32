import './bootstrap';
import { createApp } from 'vue';
import SurveyCreatorComponent from './components/SurveyCreatorComponent.vue';

const app = createApp({});
app.component('survey-creator-component', SurveyCreatorComponent);
app.mount('#app');

