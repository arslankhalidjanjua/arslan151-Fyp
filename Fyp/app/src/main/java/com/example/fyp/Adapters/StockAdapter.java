package com.example.fyp.Adapters;

import android.content.Context;
import android.content.SharedPreferences;
import android.net.Uri;
import android.os.Bundle;
import android.preference.PreferenceManager;

import android.app.ProgressDialog;
import android.content.Context;
import android.content.SharedPreferences;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import com.example.fyp.Adapters.OrdersAdapter;
import com.example.fyp.Fragments.FragmentStockDetails;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
import com.example.fyp.Models.StockBO;
import com.example.fyp.R;
import com.google.gson.Gson;
import com.google.gson.reflect.TypeToken;
import com.koushikdutta.async.future.FutureCallback;
import com.koushikdutta.ion.Ion;

import butterknife.BindView;
import butterknife.ButterKnife;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.Toast;


import org.json.JSONObject;

import java.lang.reflect.Type;
import java.util.ArrayList;

import butterknife.BindView;
import butterknife.ButterKnife;

public class StockAdapter extends RecyclerView.Adapter<RecyclerView.ViewHolder> {

    private Context context;
    private ArrayList<StockBO> arrayList;

    public StockAdapter(Context context, ArrayList<StockBO> arrayList) {
        this.context = context;
        this.arrayList = arrayList;
    }

    @NonNull
    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        return new StockViewHolder(LayoutInflater.from(context).inflate(R.layout.layout_recycler_stocks,null));
    }

    @Override
    public void onBindViewHolder(@NonNull RecyclerView.ViewHolder viewHolder, int i) {
        StockViewHolder stockViewHolder = (StockViewHolder) viewHolder;
        stockViewHolder.tvDescription.setText(arrayList.get(i).getDescription());
        stockViewHolder.tvGender.setText(arrayList.get(i).getGender());
        stockViewHolder.tvProductType.setText(arrayList.get(i).getProductType());
        stockViewHolder.tvStock.setText(arrayList.get(i).getStock());

        LoadImages.loadImageFromUrl(context,arrayList.get(i).getImagepath(),stockViewHolder.ivImageView);
    }

    @Override
    public int getItemCount() {
        return arrayList.size();
    }

    class StockViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener{

        @BindView(R.id.tvGender)
        TextView tvGender;
        @BindView(R.id.tvProductType)
        TextView tvProductType;
        @BindView(R.id.tvDescription)
        TextView tvDescription;
        @BindView(R.id.tvStock)
        TextView tvStock;
        @BindView(R.id.tvDetails)
        TextView tvDetails;
        @BindView(R.id.ivImageView)
        ImageView ivImageView;

        public StockViewHolder(@NonNull View itemView) {
            super(itemView);

            ButterKnife.bind(this,itemView);

            tvDetails.setOnClickListener(this);
        }

        @Override
        public void onClick(View v) {
            switch (v.getId())
            {
                case R.id.tvDetails:
                {
                    ((MainActivity)context).openNewFragment(FragmentStockDetails.newInstance(arrayList.get(getAdapterPosition())));
                    break;
                }
            }
        }
    }

    public void clear()
    {
        arrayList.clear();
    }

    public void updateData()
    {
        notifyDataSetChanged();
    }

    public void addItems(ArrayList<StockBO> arrayList)
    {
        clear();
        this.arrayList.addAll(arrayList);
        updateData();
    }
}
