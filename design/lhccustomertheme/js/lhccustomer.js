ee.addListener('adminChatTabSubtabClicked', function (chatId, attr) {
    if (attr.attr('aria-controls') == 'main-customer-chat-' + chatId && typeof attr.attr('nl') === 'undefined') {
        attr.attr('nl', 1);
        lhcCustomer.getCustomer(chatId);
    }
});

var lhcCustomer = {

    getCustomer : function (chatId) {
        $.getJSON(lhinst.wwwDir + "lhccustomer/getcustomer/" + chatId, function (data) {
            $('#main-customer-chat-' + chatId).html(data.result);
        });
    },

    doSearch : function (form, chat_id) {
        var inst = this;
        $.getJSON(form.attr('action'), form.serialize(), function (data) {
            if (data.error == false) {
                $('#chat-search-customer-' + chat_id).html(data.result);
            } else {
                alert(data.result);
            }
        });
        return false;
    },

    assignCustomer : function (customer_id, chat_id) {
        var inst = this;
        $.getJSON(lhinst.wwwDir + "lhccustomer/assigncustomer/" + chat_id + '/' + customer_id, function (data) {
            if (data.error == false) {
                $('#main-customer-chat-' + chat_id).html(data.result);
            } else {
                alert(data.result);
            }
        });
        return false;
    },

    unAssign : function (chat_id) {
        var inst = this;
        $.getJSON(lhinst.wwwDir + "lhccustomer/unassign/" + chat_id, function (data) {
            if (data.error == false) {
                lhcCustomer.getCustomer(chat_id);
            } else {
                alert(data.result);
            }
        });
        return false;
    }
};