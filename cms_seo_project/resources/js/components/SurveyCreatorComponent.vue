<template>
    <div id="surveyCreatorContainer"></div>
  </template>
  
  <script>
  import "survey-core/defaultV2.min.css";
  import * as SurveyCreator from "survey-creator-core";
  
  export default {
    mounted() {
      const creatorOptions = {};
      const creator = new SurveyCreator.SurveyCreator(creatorOptions);
      
      // Render creator di container HTML
      creator.render("surveyCreatorContainer");
    },
  };
  </script>
  
  <style>
  /* Optional: Tambahkan styling untuk menyesuaikan tampilan SurveyJS Creator */
  #surveyCreatorContainer {
    height: 800px;
    width: 100%;
  }
  </style>
  