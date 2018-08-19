import Modal from '../components/Modal';

export default {
    components: { Modal },
    data:{
    },
    methods: {
        changeIcon: function (icon)
        {
            if (icon.hasClass('fa-plus'))
            {
                icon.removeClass('fa-plus');
                icon.addClass('fa-minus');
                return;
            }
            icon.removeClass('fa-minus');
            icon.addClass('fa-plus');
        },
        pToggle: function(event)
        {
            var icon = $($(event.target.childNodes[0]).children()[1]);
            this.changeIcon(icon);
        },
        iToggle: function (event)
        {
            var icon = $(event.target);
            this.changeIcon(icon);
        }

    }
}
