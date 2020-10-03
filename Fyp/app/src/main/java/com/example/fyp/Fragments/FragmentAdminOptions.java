package com.example.fyp.Fragments;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.Uri;
import android.os.Bundle;
import android.preference.PreferenceManager;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.R;
import butterknife.BindView;
import butterknife.ButterKnife;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.Uri;
import android.os.Bundle;
import android.preference.PreferenceManager;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.R;
import butterknife.BindView;
import butterknife.ButterKnife;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;


import butterknife.BindView;
import butterknife.ButterKnife;

import butterknife.BindView;
import butterknife.ButterKnife;

public class FragmentAdminOptions extends Fragment implements View.OnClickListener{

    private Context context;
    private SharedPreferences sharedPreferences;
    private SharedPreferences.Editor editor;

    @BindView(R.id.btnViewStock)
    Button btnViewStock;
    @BindView(R.id.btnViewOrders)
    Button btnViewOrders;
    @BindView(R.id.btnLogin)
    Button btnLogin;
    @BindView(R.id.btnLogout)
    Button btnLogout;

    public static FragmentAdminOptions newInstance() {
        FragmentAdminOptions fragment = new FragmentAdminOptions();
        Bundle args = new Bundle();
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_fragment_admin_options, container, false);
        context = inflater.getContext();
        ButterKnife.bind(this,view);
        return view;
    }

    @Override
    public void onViewCreated(@NonNull View view, @Nullable Bundle savedInstanceState) {
        super.onViewCreated(view, savedInstanceState);

        setupPreferences();
        setupViewVisisbility();
        setupListeners();
    }

    /*SETUP LISTENERS*/
    private void setupListeners()
    {
        btnViewStock.setOnClickListener(this);
        btnViewOrders.setOnClickListener(this);
        btnLogout.setOnClickListener(this);
        btnLogin.setOnClickListener(this);
    }

    /*SETUP PREFERENCES*/
    private void setupPreferences()
    {
        sharedPreferences = PreferenceManager.getDefaultSharedPreferences(context);
        editor = sharedPreferences.edit();
    }

    /*SETUP VIEWS VISIBILITY*/
    public void setupViewVisisbility()
    {
        if(sharedPreferences.getBoolean(getResources().getString(R.string.isLoggedin),false))
        {
            btnLogin.setVisibility(View.GONE);
            btnLogout.setVisibility(View.VISIBLE);
            btnViewOrders.setVisibility(View.VISIBLE);
            btnViewStock.setVisibility(View.VISIBLE);
        }
        else
        {
            btnLogin.setVisibility(View.VISIBLE);
            btnLogout.setVisibility(View.GONE);
            btnViewOrders.setVisibility(View.GONE);
            btnViewStock.setVisibility(View.GONE);
        }
    }

    @Override
    public void onClick(View v) {
        switch (v.getId())
        {
            case R.id.btnLogin:
            {
                ((MainActivity)getActivity()).openNewFragment(FragmentAdminLogin.newInstance());
                break;
            }
            case R.id.btnViewStock:
            {
                ((MainActivity)getActivity()).openNewFragment(FragmentStock.newInstance());
                break;
            }
            case R.id.btnViewOrders:
            {
                ((MainActivity)getActivity()).openNewFragment(FragmentOrders.newInstance());
                break;
            }
            case R.id.btnLogout:
            {
                editor.putBoolean(getResources().getString(R.string.isLoggedin),false);
                editor.commit();
                setupViewVisisbility();
                break;
            }
        }
    }
}
