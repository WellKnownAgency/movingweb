<template>
  <app-navigation></app-navigation>
</template>

<script>
import { StackNavigator } from "vue-native-router";
import HomeScreen from "../src/screens/homeScreen.vue";
import DetailsScreen from "../src/screens/detailsScreen.vue";
const AppNavigation = StackNavigator(
  {
    Home: HomeScreen,
    Details: DetailsScreen,
  },
  {
    initialRouteName: 'Home',
  }
);
export default {
    components: { AppNavigation }
}
</script>
