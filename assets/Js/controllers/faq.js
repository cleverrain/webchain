import Modal from '../components/Modal';

export default {
    components: { Modal },
    data:{
    },
    methods: {
        toggle: function(event)
        {
            var icon = $(event.toElement.childNodes[0]);

            if (icon.hasClass('fa-plus-circle'))
            {
                icon.removeClass('fa-plus-circle');
                icon.addClass('fa-minus-circle');
                return;
            }

            icon.removeClass('fa-minus-circle');
            icon.addClass('fa-plus-circle');

        }
    }
}
