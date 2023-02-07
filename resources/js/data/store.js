
import {reactive} from 'vue'

export const store =reactive({
    projects:[],
    types:[],
    technologies:[],
    tosearch:'',
    searchedType:0,
    pagination:{
        current:1,
        last:1,
        per_page:10,
        stored:0,
        total:10
    },
})
