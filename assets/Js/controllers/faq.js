import Modal from '../components/Modal';

export default {
    components: { Modal },
    data:{
    },
    methods: {
        toggle: function(event)
        {
            var icon = $(event.toElement.childNodes[1]);

            if (icon.hasClass('fa-plus'))
            {
                icon.removeClass('fa-plus');
                icon.addClass('fa-minus');
                return;
            }

            icon.removeClass('fa-minus');
            icon.addClass('fa-plus');

        }
    }
}
