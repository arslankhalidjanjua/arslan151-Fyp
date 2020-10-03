package com.example.fyp.ImageUtils;


import android.content.Context;
import android.widget.ImageView;

import com.bumptech.glide.Glide;
import com.example.fyp.R;

/**
 * Created by Faraz Zahid on 26/01/2018.
 */

public class LoadImages {

    public static void loadImageFromUrl(Context context , String filePath , ImageView ivImageView)
    {
        Glide.with(context)
                .load(context.getResources().getString(R.string.base_url_image)+filePath)
                .asBitmap()
                .error(R.drawable.image)
                .into(ivImageView);
    }
}
