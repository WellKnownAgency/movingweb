@extends('layouts.cabinet')

@section('content')
<template>
<v-layout wrap>
	<v-flex sm12 md3 lg3 pa-1>

  <v-card height="350px">
    <v-navigation-drawer
      v-model="drawer"
      permanent
      absolute
    >
      <v-toolbar flat class="transparent">
        <v-list class="pa-0">
          <v-list-tile avatar>
            <v-list-tile-avatar>
							<img src="https://image.flaticon.com/icons/svg/16/16467.svg">
            </v-list-tile-avatar>

            <v-list-tile-content>
              <v-list-tile-title>Customers' Email</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-toolbar>

      <v-list class="pt-0" dense>
        <v-divider></v-divider>

        <v-list-tile>
          <v-list-tile-action>
            #request status
          </v-list-tile-action>
        </v-list-tile>
				<v-divider></v-divider>

      	</v-list>
    	</v-navigation-drawer>
		</v-card>
	</v-flex>

	<v-flex sm12 md9 lg9 pa-1>
			<v-card
	    class="pa-3"
	    flat
	    height="250px"
			width="auto"
	    img="https://cdn.vuetifyjs.com/images/toolbar/map.jpg"
	  >
	  </v-card>

	 <v-data-iterator
		 :items="items"
		 :rows-per-page-items="rowsPerPageItems"
		 content-tag="v-layout"
		 hide-actions
		 row
		 wrap
	 >
		 <template v-slot:header>
			 <v-toolbar
				 class="mb-2"
				 color="cyan lighten-5"
				 dark
				 flat
			 >
				 <v-toolbar-title>Information About Your Move</v-toolbar-title>
			 </v-toolbar>
		 </template>
		 <template v-slot:item="props">
			 <v-flex
				 xs12
				 sm6
				 md4
				 lg3
			 >
				 <v-card>
					 <v-card-title class="subheading font-weight-bold"></v-card-title>

					 <v-divider></v-divider>

					 <v-list dense>
						 <v-list-tile>
							 <v-list-tile-content>Calories:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Fat:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Carbs:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Protein:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Sodium:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Calcium:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>

						 <v-list-tile>
							 <v-list-tile-content>Iron:</v-list-tile-content>
							 <v-list-tile-content class="align-end"></v-list-tile-content>
						 </v-list-tile>
					 </v-list>
				 </v-card>
			 </v-flex>
		 </template>
	 </v-data-iterator>
	</v-flex>
</v-layout>
</template>
@endsection
