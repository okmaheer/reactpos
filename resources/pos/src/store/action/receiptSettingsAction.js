import apiConfig from '../../config/apiConfig';
import {
    apiBaseURL,
    settingActionType,
    toastType,
} from '../../constants';
import {addToast} from './toastAction';
import {setLoading} from "./loadingAction";
import {setSavingButton} from "./saveButtonAction";
import {getFormattedMessage} from "../../shared/sharedMethod";

export const editReceiptSettings = (mailSettings) => async (dispatch) => {
    dispatch(setSavingButton(true))
    apiConfig.post(`${apiBaseURL.RECEIPT_SETTINGS}/update`, mailSettings)
        .then((response) => {
            dispatch(addToast({text: getFormattedMessage('receipt-settings.success.edit.message')}));
            dispatch({type: settingActionType.EDIT_RECEIPT_SETTINGS, payload: response.data.data});
            dispatch(setSavingButton(false))
        })
        .catch(({response}) => {
            dispatch(setSavingButton(false))
            dispatch(addToast(
                {text: response.data.message, type: toastType.ERROR}));
        });
};


