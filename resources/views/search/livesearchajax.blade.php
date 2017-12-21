<?php
if(!empty($posts ))
{
    $count = 1;
    $outputhead = '';
    $outputbody = '';
    $outputtail ='';

    $outputhead .= '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Body</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                ';

    foreach ($posts as $post)
    {
        $body = substr(strip_tags($post->description),0,50)."...";
        $show = url('product/'.$post->id);
        $outputbody .=  '

                            <tr>
		                        <td>'.$count++.'</td>
		                        <td>'.$post->name.'</td>
		                        <td>'.$body.'</td>
                                <td>'.$post->created_at.'</td>
                                <td><a href="'.$show.'" target="_blank" title="SHOW" ><span class="glyphicon glyphicon-list"></span></a></td>
                            </tr>
                    ';

    }

    $outputtail .= '
                        </tbody>
                    </table>
                </div>';

    echo $outputhead;
    echo $outputbody;
    echo $outputtail;
}

else
{
    echo 'Data Not Found';
}
?>