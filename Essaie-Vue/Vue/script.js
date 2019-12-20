var problem = [ "Qui est la plus chiante?", "Votre choix"];
var option = [ "Kath", "Lucie","Tia","Sonia"];

document.addEventListener('DOMContentLoaded', function () {

    new Vue({
        el: "#sg1",
        // data is the lyric line and the two options for the dropdownlist
        data: {
                m1: problem[0],
                singerOptions: [
                    { text: option[0], value: '0' },
                    { text: option[1], value: '1' },
                    { text: option[2], value: '2' },
                    { text: option[3], value: '3' }
                ]
        },
        // and the method here just updates the text based on the singer selection
        methods: {
          onChange: function(e) {
            this.m1 = problem[e.sender.value()];
          }
        }
    })
})
