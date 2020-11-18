const app = new Vue({
    el: '#app',
    data: {
        selected_norm: '',
        selected_requirement: '',
        requirements: [],
    },
    mounted() {
        document.getElementById("requirement").disabled=true;

        this.selected_norm = this.getOldData('norm');
        if (this.selected_norm != '') {
            this.loadRequirements();
        }

        this.selected_requirement = this.getOldData('requirement');
    },
    methods: {
        loadRequirements() {
            document.getElementById("requirement").disabled=true;

            if (this.selected_norm != '') {
                axios.get('/goals/norms/requirements', {params: {
                    norm_id: this.selected_norm,
                    requirement_id: this.getOldData('requirement'),
                    used: this.getUsed()
                } }).then((response) => {
                    this.requirements = response.data;
                    document.getElementById("requirement").disabled=false;
                });
            }
        },
        getOldData(type) {
            return document.getElementById(type).getAttribute('data-old');
        },
        getUsed() {
            return document.getElementById('norm').getAttribute('used-data');
        }
    }
});