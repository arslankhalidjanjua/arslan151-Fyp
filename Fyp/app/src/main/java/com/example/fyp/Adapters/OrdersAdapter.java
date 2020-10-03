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
import android.widget.LinearLayout;
import android.widget.TextView;
import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout;

import com.example.fyp.Adapters.OrdersAdapter;
import com.example.fyp.Fragments.FragmentOrderDetails;
import com.example.fyp.ImageUtils.LoadImages;
import com.example.fyp.MainActivity;
import com.example.fyp.Models.CartBO;
import com.example.fyp.Models.OrdersBO;
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


public class OrdersAdapter extends RecyclerView.Adapter<RecyclerView.ViewHolder> {

    private Context context;
    private ArrayList<OrdersBO> arrayList;

    public OrdersAdapter(Context context, ArrayList<OrdersBO> arrayList) {
        this.context = context;
        this.arrayList = arrayList;
    }

    @NonNull
    @Override
    public RecyclerView.ViewHolder onCreateViewHolder(@NonNull ViewGroup viewGroup, int i) {
        return new OrdersViewHolder(LayoutInflater.from(context).inflate(R.layout.layout_recycler_orders,null));
    }

    @Override
    public void onBindViewHolder(@NonNull RecyclerView.ViewHolder viewHolder, int i) {
        OrdersViewHolder ordersViewHolder = (OrdersViewHolder) viewHolder;
        ordersViewHolder.tvOrderId.setText("Order Id: "+arrayList.get(i).getOrder_id());
        ordersViewHolder.tvOrderStatus.setText("Order Status: "+arrayList.get(i).getOrder_status());
        ordersViewHolder.tvPaymentMethod.setText("Payment Method: "+arrayList.get(i).getPaymentMethod());
        ordersViewHolder.tvShippingAddress.setText("Shipping Address: "+arrayList.get(i).getShippingAddress());
        ordersViewHolder.tvOrderAmount.setText("Order Amount: "+arrayList.get(i).getOrder_Ammount());
        ordersViewHolder.tvOrderTime.setText("Order Time"+arrayList.get(i).getOrderDateTime());
    }

    @Override
    public int getItemCount() {
        return arrayList.size();
    }

    class OrdersViewHolder extends RecyclerView.ViewHolder implements View.OnClickListener{

        @BindView(R.id.tvOrderId)
        TextView tvOrderId;
        @BindView(R.id.tvOrderStatus)
        TextView tvOrderStatus;
        @BindView(R.id.tvPaymentMethod)
        TextView tvPaymentMethod;
        @BindView(R.id.tvShippingAddress)
        TextView tvShippingAddress;
        @BindView(R.id.tvOrderAmount)
        TextView tvOrderAmount;
        @BindView(R.id.tvOrderTime)
        TextView tvOrderTime;
        @BindView(R.id.tvDetails)
        TextView tvDetails;

        public OrdersViewHolder(@NonNull View itemView) {
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
                    ((MainActivity)context).openNewFragment(FragmentOrderDetails.newInstance(arrayList.get(getAdapterPosition())));
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

    public void addItems(ArrayList<OrdersBO> arrayList)
    {
        clear();
        this.arrayList.addAll(arrayList);
        updateData();
    }
}
