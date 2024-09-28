<table class="table table-gray col-5">
    <p class="col-mx-auto">SYSTEM REPORT</p>
    <tr>
        <td>OS</td>
        <td><?php echo release() ?> </td>
    </tr>
    <tr>
        <td>KERNEL</td>
        <td><?php echo kernel() ?></td>
    </tr>


    <tr>
        <td>PROCESSOR</td>
        <td><?php echo processor() ?></td>
    </tr>

    <tr>

    </tr>
</table>

<?php
function release(): string
{
    $file = parse_ini_file("/etc/os-release");
    return $file['PRETTY_NAME'];
}

function kernel(): string
{
    return exec('uname') . ' ' . exec('uname -r');
}

function processor(): string
{
    return exec(
        command: 'lscpu | grep \'Model name\' | grep -v BIOS | cut -f 2 -d \':\' | awk \'{print $1 " "  $2 " " $3 " " $4}\'',
        output: $output,
        result_code: $res
    );
}
?>