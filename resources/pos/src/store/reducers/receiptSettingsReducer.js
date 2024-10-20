import {settingActionType} from '../../constants';

export default (state = {}, action) => {
    switch (action.type) {
        case settingActionType.EDIT_RECEIPT_SETTINGS:
            return action.payload;
        default:
            return state;
    }
};
