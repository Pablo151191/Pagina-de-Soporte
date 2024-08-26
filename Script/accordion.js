document.addEventListener('DOMContentLoaded', function () {
    console.log("Accordion Cargado");

    const dataAccordion = [
        {
            "title": "¿Quienes somos?",
            "desc": "En Soporte Técnico JyK, somos un equipo especialistas en soporte técnico de computadoras, dedicados a ofrecer soluciones confiables y eficientes para todos tus problemas tecnológicos. Desde nuestra fundación en 2023, hemos estado comprometidos en brindar un servicio excepcional que te permita disfrutar de una experiencia sin preocupaciones con tus dispositivos."
        },
        {
            "title": "Misión",
            "desc": "Nuestra misión es proporcionar soporte técnico de la más alta calidad para garantizar que tu tecnología funcione de manera óptima. Nos esforzamos por resolver problemas técnicos complejos con rapidez y precisión, minimizando el tiempo de inactividad y maximizando la productividad de nuestros clientes."
        },
        {
            "title": "Visión",
            "desc": "Nuestra visión es convertirnos en el referente global en soporte técnico para computadoras, conocido por nuestra excelencia en el servicio y nuestra capacidad para resolver los desafíos tecnológicos más complejos."
        },
    ];

    (function () {
        let ACCORDION = {
            init: function () {
                let _self = this;
                // Llamamos a las funciones
                this.insertData(_self);
                this.eventhandler(_self);
            },

            insertData: function (_self) {
                dataAccordion.map(function (item, index) {
                    document.querySelector('.main-accordion-container').insertAdjacentHTML("beforeend", _self.tplAccordionItem(item));
                });
            },

            eventhandler: function (_self) {
                let arrayRefs = document.querySelectorAll('.accordion-item');
                for (let x = 0; x < arrayRefs.length; x++) {
                    arrayRefs[x].addEventListener('click', function (event) {
                        console.log('event: ', event);
                        _self.showTab(arrayRefs[x]);
                    });
                }
            },


            tplAccordionItem: function (item) {
                return (`<div class='accordion-item'>
                    <div class='accordion-title'><p>${item.title}</p></div>
                    <div class='accordion-desc'><p>${item.desc}</p></div>
                    </div>`
                );
            },

            showTab: function (accordionItem) {
                if (accordionItem.classList.contains('tab-active')) {
                    accordionItem.classList.remove('tab-active');
                } else {
                    let activeTab = document.querySelector('.tab-active');
                    if (activeTab) {
                        activeTab.classList.remove('tab-active');
                    }
                    accordionItem.classList.add('tab-active');
                }
            },
        };
        ACCORDION.init();
    })();
});