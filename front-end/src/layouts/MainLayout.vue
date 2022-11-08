<template>
  <q-layout view="lHh Lpr lFf">
    <q-header >
      <q-toolbar>
        <q-btn
          flat
          dense
          round
          @click="leftDrawerOpen = !leftDrawerOpen"
          icon="menu"
          aria-label="Menu"
          
        />
        <table width="100%">
          <tr>
            <td><div class="text-h3">TODO-list</div></td>
            <td>
                <div>
                  <img src="https://www.softpar.inf.br/_nuxt/img/logo.303aa2f.png" alt="" width="400" align="center">
                </div>
            </td>
          </tr>
          <tr>
            
            <div class="text-subtitle1">{{ todaysDate }}</div>
          </tr>
          
        </table>
  
        
        
        <br>
        
  
      </q-toolbar>
    </q-header>

    <q-drawer
        v-model="leftDrawerOpen"
        show-if-above
        :width="300"
        :breakpoint="400"
      >
        <q-scroll-area style="height: calc(100% - 150px); margin-top: 150px; border-right: 1px solid #ddd">
          <br><br><br>
          <q-list padding>
            <q-item 
              to="/"
              exact
              clickable v-ripple>
              <q-item-section avatar>
                
                <q-icon name="list" />
              </q-item-section>
              

              <q-item-section>
                
                Todo
              </q-item-section>
            </q-item>
          </q-list>
        </q-scroll-area>

        <q-img class="absolute-top" src="https://setcesp.org.br/wp-content/uploads/2019/03/panthermedia_B28615723_3776x2800-1080x675.jpg" style="height: 207px">
          <div class="absolute-bottom bg-transparent">
            <q-avatar size="56px" class="q-mb-sm">
              
            </q-avatar>

          </div>
        </q-img>
      </q-drawer>

    <q-page-container>

      <KeepAlive>
        <router-view />
      </KeepAlive>
    </q-page-container>
  </q-layout>
</template>

<script>
import {date} from 'quasar'

export default{
  name: 'MainLayout', 

  data(){
    return{
      leftDrawerOpen: false
    }
  },
  computed: {
    todaysDate(){
      let timeStamp = Date.now()
      return date.formatDate(timeStamp, 'dddd D MMMM')
    }
  }
}
</script>

