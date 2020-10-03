package com.example.fyp.Fragments;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.preference.PreferenceManager;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.R;
import com.example.fyp.Utils.Utilities;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import org.json.JSONObject;

import butterknife.BindView;
import butterknife.ButterKnife;

public class FragmentAdminLogin extends Fragment implements View.OnClickListener{

    private Context context;
    private SharedPreferences sharedPreferences;
    private SharedPreferences.Editor editor;
    private ProgressDialog progressDialog;

    @BindView(R.id.etEmail)
    EditText etEmail;
    @BindView(R.id.etPassword)
    EditText etPassword;
    @BindView(R.id.btnLogin)
    Button btnLogin;

    public static FragmentAdminLogin newInstance() {
        FragmentAdminLogin fragment = new FragmentAdminLogin();
        Bundle args = new Bundle();
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_fragment_admin_login, container, false);
        context = inflater.getContext();
        ButterKnife.bind(this,view);
        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        setupListeners();
        setupSharedPreferences();
        setupProgressDialoge();
    }

    /*SETUP PROGRESS DIALOGE*/
    private void setupProgressDialoge()
    {
        progressDialog = new ProgressDialog(context);
        progressDialog.setMessage("Verifying Credentials...");
        progressDialog.setCanceledOnTouchOutside(false);
    }

    /*SETUP SHARED PREFERENCES*/
    private void setupSharedPreferences()
    {
        sharedPreferences = PreferenceManager.getDefaultSharedPreferences(context);
        editor = sharedPreferences.edit();
    }

    /*SETUP LISENTERS*/
    private void setupListeners()
    {
        btnLogin.setOnClickListener(this);
    }

    /*VERIFY DATA*/
    private boolean verifyData()
    {
        boolean check = true;

        if(TextUtils.isEmpty(etEmail.getText().toString().trim()))
        {
            etEmail.setError(getResources().getString(R.string.field_is_required));
            check = false;
        }
        else if(!Utilities.isValidEmail(etEmail.getText().toString().trim()))
        {
            etEmail.setError(getResources().getString(R.string.email_not_valid));
            check = false;
        }
        else if(TextUtils.isEmpty(etPassword.getText().toString().trim()))
        {
            etPassword.setError(getResources().getString(R.string.field_is_required));
            check = false;
        }

        return check;
    }

    /*PARSE JSON STRING*/
    private void parseJson(String jsonString)
    {
        try {
            JSONObject jsonObject = new JSONObject(jsonString);
            if(jsonObject.getInt("success")==1) {
                editor.putBoolean(getResources().getString(R.string.isLoggedin),true);//fasle not login
                editor.commit();//jo string ati hy json ki string pass kerta hy so we can get values.. suc as success.. getimtys
                for (Fragment fragment :getFragmentManager().getFragments()) {
                    if(fragment instanceof FragmentAdminOptions)
                    {
                        ((FragmentAdminOptions)fragment).setupViewVisisbility();
                    }
                }

                ((MainActivity)context).popFragment(1);
            }
            Toast.makeText(context,jsonObject.get("message").toString(),Toast.LENGTH_SHORT).show();
            if(progressDialog.isShowing()) {
                progressDialog.dismiss();
            }
        }
        catch (Exception e)
        {
            if(progressDialog.isShowing()) {
                progressDialog.dismiss();
            }
            e.toString();
        }
    }

    /*CALL VERIFY ADMIN LOGIN CREDENTIALS*/
    private void callVerifyAdminLoginCredentialsApi()
    {
        progressDialog.show();
        Ion.with(context)
                .load(getResources().getString(R.string.base_url) +"varifyAdminLoginCredentials.php")
                .setBodyParameter("email",etEmail.getText().toString().trim())
                .setBodyParameter("password",etPassword.getText().toString().trim())
                .asString().setCallback(new FutureCallback<String>() {
            @Override//onclick mthod is called verified k necy
            public void onCompleted(Exception e, String result) {
                if(e!=null)
                {
                    Toast.makeText(context,e.toString(),Toast.LENGTH_SHORT).show();
                    progressDialog.dismiss();
                }
                else if(!TextUtils.isEmpty(result))
                {
                    parseJson(result);
                }
            }
        });
    }

    @Override
    public void onClick(View v) {
        switch (v.getId())
        {
            case R.id.btnLogin://upper api is called data is verifid by verify data method
            {
                if(verifyData())
                {
                    callVerifyAdminLoginCredentialsApi();
                }
                break;
            }
        }
    }
}
