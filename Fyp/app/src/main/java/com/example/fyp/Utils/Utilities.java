package com.example.fyp.Utils;

import android.util.Patterns;

public class Utilities {

    public static boolean isValidEmail(String email)
    {
        if(Patterns.EMAIL_ADDRESS.matcher(email).matches())
        {
            return true;
        }

        return false;
    }

}
