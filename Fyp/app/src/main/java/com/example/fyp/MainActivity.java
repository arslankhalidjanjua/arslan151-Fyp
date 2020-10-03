package com.example.fyp;


import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;
import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentTransaction;

import com.example.fyp.Fragments.FragmentAdminOptions;


public class MainActivity extends AppCompatActivity {

    private FragmentManager fragmentManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        initializeFragmentManager();
        openFirstFragment();
    }

    /*INITIALIZE FRAGMENT MANAGER TO MAINTAIN FRAGMENTS*/
    private void initializeFragmentManager()
    {
        fragmentManager = getSupportFragmentManager();
    }

    /*OPEN FIRST FRAGMENT*/
    private void openFirstFragment()
    {
        FragmentTransaction fragmentTransaction = fragmentManager.beginTransaction();
        fragmentTransaction.add(R.id.flFragmentsContainer, FragmentAdminOptions.newInstance());
        fragmentTransaction.addToBackStack("");
        fragmentTransaction.commit();
    }

    /*OPEN NEW FRAGMENT*/
    public void openNewFragment(Fragment fragment)
    {
        FragmentTransaction fragmentTransaction = fragmentManager.beginTransaction();
        fragmentTransaction.add(R.id.flFragmentsContainer,fragment);
        fragmentTransaction.addToBackStack("");
        fragmentTransaction.commit();
    }

    /*POP FRAGMENT FROM BACK STACK*/
    public void popFragment(int count)
    {
        fragmentManager.popBackStack();
    }

    @Override
    public void onBackPressed() {
        if(fragmentManager.getBackStackEntryCount()==1)
        {
            popFragment(1);
            super.onBackPressed();
        }
        else if(fragmentManager.getBackStackEntryCount()>1){
            popFragment(1);
        }
    }
}
